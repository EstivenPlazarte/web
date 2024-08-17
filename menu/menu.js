// index.js
document.getElementById("menu-toggle").addEventListener("click", function() {
    document.getElementById("sidebar").style.left = "0";
});

document.getElementById("close-btn").addEventListener("click", function() {
    document.getElementById("sidebar").style.left = "-250px";
});
