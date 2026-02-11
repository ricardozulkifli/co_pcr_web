document.addEventListener("DOMContentLoaded", function () {

    const inputs = document.querySelectorAll(".form-control-custom");

    inputs.forEach(input => {
        input.addEventListener("focus", function () {
            this.style.transform = "scale(1.02)";
        });

        input.addEventListener("blur", function () {
            this.style.transform = "scale(1)";
        });
    });

});
