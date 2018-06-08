var ct = 0;
var addCount = document.createElement('input');
addCount.type = "hidden";
addCount.id = "count";
addCount.name = "count";
addCount.value = "0";
document.getElementById('mainform').appendChild(addCount);
function countme() {
    document.getElementById('count').value = ++ct;
}
var ct2 = 0;
var addCount2 = document.createElement('input');
addCount2.type = "hidden";
addCount2.id = "count2";
addCount2.name = "count2";
addCount2.value = "0";
document.getElementById('callback').appendChild(addCount2);
function countme2() {
    document.getElementById('count2').value = ++ct2;
} 