const cf = document.querySelector("#Stora");
const fc = document.querySelector("#Små");

cf.addEventListener("change", function () {
    fc.checked = !fc.checked;
})
fc.addEventListener("change", function () {
    cf.checked = !cf.checked;
})