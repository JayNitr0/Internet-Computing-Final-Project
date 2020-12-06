let usernameCookie = document.cookie;

console.log("this");
console.log(usernameCookie);
if (usernameCookie == '') {
    console.log("that")
    let username = prompt("Welcome, please enter a username:");
    document.cookie = "usernameCookie="+ username +"; expires=Sun, 05 Dec 2021 00:00:00 UTC; path=/"; 
}