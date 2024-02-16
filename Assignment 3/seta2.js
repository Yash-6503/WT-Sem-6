// Add or append text to the paragraph using jQuery
$(document).ready(function () {
    // Add text to the paragraph
    $('#paragraph').text($('#paragraph').text() + ' Additional text added.');

    // Append text to the ordered list
    $('#orderedList').append('<li>Item 4</li>');

    // Append multiple items to the ordered list
    $('#orderedList').append('<li>Item 5</li><li>Item 6</li>');

    // Add text to the existing items in the ordered list
    $('#orderedList li').each(function () {
        var currentText = $(this).text();
        $(this).text(currentText + ' - Updated');
    });
});

