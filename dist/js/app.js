

$( document ).ready(function() {
    function require(script) {
        $.ajax({
            url: script,
            dataType: "script",
            async: false,           // <-- This is the key
            success: function () {
                console.log('JS loaded successfully')
            },
            error: function () {
                throw new Error("Could not load script " + script);
            }
        });
    }

    require("../dist/assets/jquery-file-upload/js/vendor/jquery.ui.widget.js");
    require("../dist/assets/jquery-file-upload/js/jquery.iframe-transport.js");
    require("../dist/assets/jquery-file-upload/js/jquery.fileupload.js");
});

