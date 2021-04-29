<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
</head>
<body>

Search the Scriptures<br>
<input type="text" id="search-input" />
<button id="search-button">Search</button>
<hr>
<div id="result">
    <h4></h4>
    <h5></h5>
    <p></p>
</div>
</body>
<script>
jQuery(document).ready(function(){
    var apiServer = 'https://bible-api.com/';

    jQuery('#search-button').on('click', function() {
        var input = jQuery('#search-input').val();
        var url = apiServer + input + '?translation=kjv';
        search(url);
        // var url2 = apiServer + input + '?translation=almeida';
        // search2(url);
    });

    function search(url) {
        jQuery.get(url, function(response) {
            console.log(response);
            jQuery('#result h4').text(response.reference);
            jQuery('#result h5').text(response.translation_name);
            jQuery('#result p').text(response.text);
        })
        .fail(function(error) {
            jQuery('#result h4').text('Invalid');
            jQuery('#result h5').text('---');
            jQuery('#result p').text('Verse not found');
        });
    }
});
</script>
</html>