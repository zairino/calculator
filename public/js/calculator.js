$(document).ready(function() {

    let lastIsOperation = true;

    $('.operator').on('click', function(e) {
        if (lastIsOperation === false) {
            lastIsOperation = true;
            appendValue($(this).val());
        }
    });

    $('.number').on('click', function(e) {
        lastIsOperation = false;
        appendValue($(this).val());
    });

    $('.clear').on('click', function(e) {
        lastIsOperation = true;
        displayResult('0');
    });

    $('.equal').on('click', function(e) {
        if (lastIsOperation === false) {
            $.ajax({
                type: 'POST',
                url: $(this).attr('data-href'),
                data: {
                    'expression': $('#calc-output').text()
                },
                success: function(s) {
                    lastIsOperation = false;

                    if (s.result) {
                        displayResult(s.result);
                    }
                },
                error: function(e) {
                    console.warn(e);
                    alert('An error occur, check console for more detail');
                }
            });
        }
    });
});

function appendValue(value) {
    let resNode = $('#calc-output');

    if (resNode.text() === '0') {
        resNode.text(value);
    } else {
        resNode.append(value);
    }
}

function displayResult(res) {
    $('#calc-output').text(res);
}
