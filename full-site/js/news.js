(function() {
    window.onload = function() {
        var lang = 'ua';
        var newsPerPage = 8;
        var startWith = 1;
        var currentPage = 1;
        var fullMarkup = '';
        var links = document.querySelectorAll('.news__pagination-item-link');

        // determine language
        if(window.location.pathname.search(/ru/) !== -1) {
            lang = 'ru';
			//console.log(lang);
        } else if(window.location.pathname.search(/en/) !== -1){
            lang = 'en';
			//console.log(lang);
        } else {
			lang = 'ua';
			//console.log(lang);
		};

        // determine page if page in session storage use it as current page value
        if(sessionStorage.getItem('currentPage')) {
            currentPage = sessionStorage.getItem('currentPage');
            startWith = currentPage == 1 ? 1 : (currentPage - 1) * newsPerPage;
        } else {
            currentPage = 1;
        }

        var text = {
            readMore: {
                ua: 'Читати далі',
                ru: 'Читать дальше',
				en: 'Read more'
            }
        };

        var months = [
            { ua: 'cічня', ru: 'января', en: 'January'},
            { ua: 'лютого', ru: 'февраля', en: 'February'},
            { ua: 'березня', ru: 'марта', en: 'March'},
            { ua: 'квітня', ru: 'апреля', en: 'April'},
            { ua: 'травня', ru: 'мая', en: 'May'},
            { ua: 'червня', ru: 'июня', en: 'June'},
            { ua: 'липня', ru: 'июля', en: 'July'},
            { ua: 'серпня', ru: 'августа', en: 'August'},
            { ua: 'вересня', ru: 'сентября', en: 'September'},
            { ua: 'жовтня', ru: 'октября', en: 'October'},
            { ua: 'листопада', ru: 'ноября', en: 'November'},
            { ua: 'грудня', ru: 'декабря', en: 'December'}        
        ];


        // AJAX POST reuqest to get news
        function getNews(startWith, newsPerPage, lang, callback) {
            var xhr = new XMLHttpRequest();
            var body = 'start=' + startWith + '&perPage=' + newsPerPage + '&lang=' + lang;
            xhr.open("POST", '/get_news.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState==4 && xhr.status==200){
                    callback(xhr.responseText);
                }
            }
            xhr.send(body);
        };

        function placeFullMakrup(d) {
            
			//console.log(d);
			var parsedRes = JSON.parse(d);
			//console.log(parsedRes);
            fullMarkup = '';
            parsedRes.forEach(function(news) {
                fullMarkup += createOneNewsItemMarkup(news);
            });
            setActivePage();
            document.querySelector('.news__list').innerHTML = fullMarkup;
        };

        // Callback from reqqest
        getNews(startWith, newsPerPage, lang, placeFullMakrup);

        // Markup for one single news item
        function createOneNewsItemMarkup(news) {
		// determine language
        if(window.location.pathname.search(/ru/) !== -1) {
			//console.log(lang);
               return '<li class="news__list-item">' +
                        '<a href="'+ news.news_code  +'/">' +
                        '<div class="news__list-item-top">' + 
                            '<div class="news__list-item-image" style="background-image: url(' + news.img_path + '/' + news.img_name + ')"></div>' +
                            // '<div class="news__list-item-date_1">' + formatDate1(news[2]) + '</div>' + 
                            '<h4 class="news__list-item-heading">' + news.name_news_ru + '</h4>' +
                    '</div>' +
                        '<div class="news__list-item-description">' + 
                            '<p>' + news.min_text_ru + '</p>' + 
                        '</div>' + 
                        '<div class="news__list-item-bottom">' + 
                            '<div class="news__list-item-date_2">' + 
                                '<span class="news__list-item-calendar">' + 
                                    '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 488.152 488.152"><path d="M177.854 269.311c0-6.115-4.96-11.069-11.08-11.069h-38.665c-6.113 0-11.074 4.954-11.074 11.069v38.66c0 6.123 4.961 11.079 11.074 11.079h38.665c6.12 0 11.08-4.956 11.08-11.079v-38.66zM274.483 269.311c0-6.115-4.961-11.069-11.069-11.069h-38.67c-6.113 0-11.074 4.954-11.074 11.069v38.66c0 6.123 4.961 11.079 11.074 11.079h38.67c6.108 0 11.069-4.956 11.069-11.079v-38.66zM371.117 269.311c0-6.115-4.961-11.069-11.074-11.069h-38.665c-6.12 0-11.08 4.954-11.08 11.069v38.66c0 6.123 4.96 11.079 11.08 11.079h38.665c6.113 0 11.074-4.956 11.074-11.079v-38.66zM177.854 365.95c0-6.125-4.96-11.075-11.08-11.075h-38.665c-6.113 0-11.074 4.95-11.074 11.075v38.653c0 6.119 4.961 11.074 11.074 11.074h38.665c6.12 0 11.08-4.956 11.08-11.074V365.95zM274.483 365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.113 0-11.074 4.95-11.074 11.075v38.653c0 6.119 4.961 11.074 11.074 11.074h38.67c6.108 0 11.069-4.956 11.069-11.074V365.95zM371.117 365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.12 0-11.08 4.95-11.08 11.075v38.653c0 6.119 4.96 11.074 11.08 11.074h38.67c6.108 0 11.069-4.956 11.069-11.074V365.95z"/><path d="M440.254 54.354v59.05c0 26.69-21.652 48.198-48.338 48.198h-30.493c-26.688 0-48.627-21.508-48.627-48.198V54.142h-137.44v59.262c0 26.69-21.938 48.198-48.622 48.198H96.235c-26.685 0-48.336-21.508-48.336-48.198v-59.05c-23.323.703-42.488 20.002-42.488 43.723v346.061c0 24.167 19.588 44.015 43.755 44.015h389.82c24.131 0 43.755-19.889 43.755-44.015V98.077c0-23.721-19.164-43.02-42.487-43.723zm-14.163 368.234c0 10.444-8.468 18.917-18.916 18.917H80.144c-10.448 0-18.916-8.473-18.916-18.917V243.835c0-10.448 8.467-18.921 18.916-18.921h327.03c10.448 0 18.916 8.473 18.916 18.921l.001 178.753z"/><path d="M96.128 129.945h30.162c9.155 0 16.578-7.412 16.578-16.567V16.573C142.868 7.417 135.445 0 126.29 0H96.128C86.972 0 79.55 7.417 79.55 16.573v96.805c0 9.155 7.422 16.567 16.578 16.567zM361.035 129.945h30.162c9.149 0 16.572-7.412 16.572-16.567V16.573C407.77 7.417 400.347 0 391.197 0h-30.162c-9.154 0-16.577 7.417-16.577 16.573v96.805c0 9.155 7.423 16.567 16.577 16.567z"/></svg>' + 
                                '</span>' + 
                                '<span>' + formatDate2(news.date) + '</span>' + 
                            '</div>' +
                            '<sapn class="news__list-item-read-more-btn">' + text.readMore[lang] + '</span>' + 
                    '</div>' +
                    '</a>' +
                    '</li>';
        } else if(window.location.pathname.search(/en/) !== -1){
          
        //console.log(lang);
            return '<li class="news__list-item">' +
                        '<a href="'+ news.news_code  +'/">' +
                        '<div class="news__list-item-top">' + 
                            '<div class="news__list-item-image" style="background-image: url(' + news.img_path + '/' + news.img_name + ')"></div>' +
                            // '<div class="news__list-item-date_1">' + formatDate1(news[2]) + '</div>' + 
                            '<h4 class="news__list-item-heading">' + news.name_news_en + '</h4>' +
                    '</div>' +
                        '<div class="news__list-item-description">' + 
                            '<p>' + news.min_text_en + '</p>' + 
                        '</div>' + 
                        '<div class="news__list-item-bottom">' + 
                            '<div class="news__list-item-date_2">' + 
                                '<span class="news__list-item-calendar">' + 
                                    '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 488.152 488.152"><path d="M177.854 269.311c0-6.115-4.96-11.069-11.08-11.069h-38.665c-6.113 0-11.074 4.954-11.074 11.069v38.66c0 6.123 4.961 11.079 11.074 11.079h38.665c6.12 0 11.08-4.956 11.08-11.079v-38.66zM274.483 269.311c0-6.115-4.961-11.069-11.069-11.069h-38.67c-6.113 0-11.074 4.954-11.074 11.069v38.66c0 6.123 4.961 11.079 11.074 11.079h38.67c6.108 0 11.069-4.956 11.069-11.079v-38.66zM371.117 269.311c0-6.115-4.961-11.069-11.074-11.069h-38.665c-6.12 0-11.08 4.954-11.08 11.069v38.66c0 6.123 4.96 11.079 11.08 11.079h38.665c6.113 0 11.074-4.956 11.074-11.079v-38.66zM177.854 365.95c0-6.125-4.96-11.075-11.08-11.075h-38.665c-6.113 0-11.074 4.95-11.074 11.075v38.653c0 6.119 4.961 11.074 11.074 11.074h38.665c6.12 0 11.08-4.956 11.08-11.074V365.95zM274.483 365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.113 0-11.074 4.95-11.074 11.075v38.653c0 6.119 4.961 11.074 11.074 11.074h38.67c6.108 0 11.069-4.956 11.069-11.074V365.95zM371.117 365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.12 0-11.08 4.95-11.08 11.075v38.653c0 6.119 4.96 11.074 11.08 11.074h38.67c6.108 0 11.069-4.956 11.069-11.074V365.95z"/><path d="M440.254 54.354v59.05c0 26.69-21.652 48.198-48.338 48.198h-30.493c-26.688 0-48.627-21.508-48.627-48.198V54.142h-137.44v59.262c0 26.69-21.938 48.198-48.622 48.198H96.235c-26.685 0-48.336-21.508-48.336-48.198v-59.05c-23.323.703-42.488 20.002-42.488 43.723v346.061c0 24.167 19.588 44.015 43.755 44.015h389.82c24.131 0 43.755-19.889 43.755-44.015V98.077c0-23.721-19.164-43.02-42.487-43.723zm-14.163 368.234c0 10.444-8.468 18.917-18.916 18.917H80.144c-10.448 0-18.916-8.473-18.916-18.917V243.835c0-10.448 8.467-18.921 18.916-18.921h327.03c10.448 0 18.916 8.473 18.916 18.921l.001 178.753z"/><path d="M96.128 129.945h30.162c9.155 0 16.578-7.412 16.578-16.567V16.573C142.868 7.417 135.445 0 126.29 0H96.128C86.972 0 79.55 7.417 79.55 16.573v96.805c0 9.155 7.422 16.567 16.578 16.567zM361.035 129.945h30.162c9.149 0 16.572-7.412 16.572-16.567V16.573C407.77 7.417 400.347 0 391.197 0h-30.162c-9.154 0-16.577 7.417-16.577 16.573v96.805c0 9.155 7.423 16.567 16.577 16.567z"/></svg>' + 
                                '</span>' + 
                                '<span>' + formatDate2(news.date) + '</span>' + 
                            '</div>' +
                            '<sapn class="news__list-item-read-more-btn">' + text.readMore[lang] + '</span>' + 
                    '</div>' +
                    '</a>' +
                    '</li>';
		}  else {
          
        //console.log(lang);
            return '<li class="news__list-item">' +
                        '<a href="'+ news.news_code  +'/">' +
                        '<div class="news__list-item-top">' + 
                            '<div class="news__list-item-image" style="background-image: url(' + news.img_path + '/' + news.img_name + ')"></div>' +
                            // '<div class="news__list-item-date_1">' + formatDate1(news[2]) + '</div>' + 
                            '<h4 class="news__list-item-heading">' + news.name_news_ua + '</h4>' +
                    '</div>' +
                        '<div class="news__list-item-description">' + 
                            '<p>' + news.min_text_ua + '</p>' + 
                        '</div>' + 
                        '<div class="news__list-item-bottom">' + 
                            '<div class="news__list-item-date_2">' + 
                                '<span class="news__list-item-calendar">' + 
                                    '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 488.152 488.152"><path d="M177.854 269.311c0-6.115-4.96-11.069-11.08-11.069h-38.665c-6.113 0-11.074 4.954-11.074 11.069v38.66c0 6.123 4.961 11.079 11.074 11.079h38.665c6.12 0 11.08-4.956 11.08-11.079v-38.66zM274.483 269.311c0-6.115-4.961-11.069-11.069-11.069h-38.67c-6.113 0-11.074 4.954-11.074 11.069v38.66c0 6.123 4.961 11.079 11.074 11.079h38.67c6.108 0 11.069-4.956 11.069-11.079v-38.66zM371.117 269.311c0-6.115-4.961-11.069-11.074-11.069h-38.665c-6.12 0-11.08 4.954-11.08 11.069v38.66c0 6.123 4.96 11.079 11.08 11.079h38.665c6.113 0 11.074-4.956 11.074-11.079v-38.66zM177.854 365.95c0-6.125-4.96-11.075-11.08-11.075h-38.665c-6.113 0-11.074 4.95-11.074 11.075v38.653c0 6.119 4.961 11.074 11.074 11.074h38.665c6.12 0 11.08-4.956 11.08-11.074V365.95zM274.483 365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.113 0-11.074 4.95-11.074 11.075v38.653c0 6.119 4.961 11.074 11.074 11.074h38.67c6.108 0 11.069-4.956 11.069-11.074V365.95zM371.117 365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.12 0-11.08 4.95-11.08 11.075v38.653c0 6.119 4.96 11.074 11.08 11.074h38.67c6.108 0 11.069-4.956 11.069-11.074V365.95z"/><path d="M440.254 54.354v59.05c0 26.69-21.652 48.198-48.338 48.198h-30.493c-26.688 0-48.627-21.508-48.627-48.198V54.142h-137.44v59.262c0 26.69-21.938 48.198-48.622 48.198H96.235c-26.685 0-48.336-21.508-48.336-48.198v-59.05c-23.323.703-42.488 20.002-42.488 43.723v346.061c0 24.167 19.588 44.015 43.755 44.015h389.82c24.131 0 43.755-19.889 43.755-44.015V98.077c0-23.721-19.164-43.02-42.487-43.723zm-14.163 368.234c0 10.444-8.468 18.917-18.916 18.917H80.144c-10.448 0-18.916-8.473-18.916-18.917V243.835c0-10.448 8.467-18.921 18.916-18.921h327.03c10.448 0 18.916 8.473 18.916 18.921l.001 178.753z"/><path d="M96.128 129.945h30.162c9.155 0 16.578-7.412 16.578-16.567V16.573C142.868 7.417 135.445 0 126.29 0H96.128C86.972 0 79.55 7.417 79.55 16.573v96.805c0 9.155 7.422 16.567 16.578 16.567zM361.035 129.945h30.162c9.149 0 16.572-7.412 16.572-16.567V16.573C407.77 7.417 400.347 0 391.197 0h-30.162c-9.154 0-16.577 7.417-16.577 16.573v96.805c0 9.155 7.423 16.567 16.577 16.567z"/></svg>' + 
                                '</span>' + 
                                '<span>' + formatDate2(news.date) + '</span>' + 
                            '</div>' +
                            '<sapn class="news__list-item-read-more-btn">' + text.readMore[lang] + '</span>' + 
                    '</div>' +
                    '</a>' +
                    '</li>'; 
				};
        };

        function formatDate1(d) {
            var date = new Date(d);
            var day = date.getDate();
            var month = months[date.getMonth()][lang];
            var year = date.getFullYear();
            return day + " " + month + " " + year;
        };

        function formatDate2(d) {
            var date = new Date(d);
            var day = date.getDate() > 9 ? date.getDate() : "0" + date.getDate();
            var month = (date.getMonth() + 1) > 9 ? (date.getMonth() + 1) : "0" + (date.getMonth() + 1);
            var year = date.getFullYear();
            return day + '.' + month + '.' + year;
        };

        function setActivePage() {
            links.forEach(function(link) {
                if(link.dataset.page == currentPage) {
                    link.classList.add('news__pagination-item-link_active');
                } else {
                    link.classList.remove('news__pagination-item-link_active');
                }
            });
        };

        links.forEach(function(link) {
            link.addEventListener('click',function(e) {
                e.preventDefault();
                var page = e.target.dataset.page;
                // Calculate where to start news
                startWith = page == 1 ? 1 : (page - 1) * newsPerPage + 1;
                currentPage = page;
                sessionStorage.setItem('currentPage', currentPage);
                getNews(startWith, newsPerPage, lang, placeFullMakrup);
            });
        });
    }
})();