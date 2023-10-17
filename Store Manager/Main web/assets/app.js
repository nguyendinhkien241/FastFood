const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

var currentDate = new Date();
var dateString = currentDate.toDateString();
$('.current-date').innerHTML = dateString;

