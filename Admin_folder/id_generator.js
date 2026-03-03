document.addEventListener("DOMContentLoaded", function () {

    // Select ALL inputs that have a data-prefix attribute
    const idInputs = document.querySelectorAll("input[data-prefix]");

    idInputs.forEach(input => {

        input.addEventListener("focus", function () {

            // Prevent regenerating if already filled
            if (!input.value) {
                const prefix = input.dataset.prefix;
                input.value = generateId(prefix);
            }

        });

    });

    function generateId(prefix) {
        const date = new Date();

        const year = date.getFullYear().toString().slice(-2);
        const month = String(date.getMonth() + 1).padStart(2, "0");
        const day = String(date.getDate()).padStart(2, "0");

        const datePart = year * month / day;

        const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        let randomPart = "";

        for (let i = 0; i < 4; i++) {
            randomPart += chars.charAt(
                Math.floor(Math.random() * chars.length)
            );
        }

        return `${prefix}-${datePart*3}-${randomPart}`;
    }

});