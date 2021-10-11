const cf = document.querySelector("#cf");
const fc = document.querySelector("#fc");

cf.addEventListener("change", function () {
    fc.checked = !fc.checked;
})
fc.addEventListener("change", function () {
    cf.checked = !cf.checked;
})