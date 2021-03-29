$(document).ready(function () {
    $('#txtDescription').keyup(function () {
        var characterCount = $(this).val().length,
            current = $('#current_description'),
            maximum = $('#maximum_description'),
            theCount = $('#the-count_description');
        var maxlength = $(this).attr('maxlength');
        var changeColor = 0.95 * maxlength;
        current.text(characterCount);

        if (characterCount > changeColor && characterCount < maxlength) {
            current.css('color', '#FF4500');
            current.css('fontWeight', 'bold');
        }
        else if (characterCount >= maxlength) {
            current.css('color', '#B22222');
            current.css('fontWeight', 'bold');
        }
        else {
            var col = maximum.css('color');
            var fontW = maximum.css('fontWeight');
            current.css('color', col);
            current.css('fontWeight', fontW);
        }
    });
});
