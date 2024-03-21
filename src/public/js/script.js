$(document).ready(function () {

    // On Focus
    $("#username").on("focus", function () {

        // Removing Tailwind Class
        $('#label-username').removeClass('mb-[-23px] pt-4 pb-4 pl-2 text-gray-500');

        // Adding Tailwind Class
        $('#label-username').addClass('mb-0 pt-2 pb-[3px] pl-2 text-sky-600 text-sm');

    });

    // When Focused Out
    $("#username").on("focusout", function () {

        // Removing Tailwind Class
        $('#label-username').removeClass('mb-0 pt-2 pb-[3px] pl-2 text-sky-600 text-sm');

        // Adding Tailwind Class
        $('#label-username').addClass('mb-[-23px] pt-4 pb-4 pl-2 text-gray-500');

    });

});
