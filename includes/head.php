<meta name="description" content="Montreal based, Mobilier Jussaume, designs, manufactures and supplies exclusive furniture to commercial establishments and distributors.">

<link rel="stylesheet" href="/css/normalize.min.css">
<link rel="stylesheet" href="/css/main.css">


<link rel="icon" type="image/png" href="/img/favicon.png" />

<script type="text/javascript" src="/js/jquery-1.11.3.min.js"></script>
<script>
    $( document ).ready(function() {
        function recalculateCenterInDiv(){
            $('.full-center').each(function(){
                var parentHeight = $(window).height(); // Always equal to the full screen
                console.log(parentHeight);
                var elementHeight = $(this).height();
                $(this).css("top", parentHeight/2 - elementHeight/2); // +47 for navbar
            });
        }
        recalculateCenterInDiv();
        // Redo when resizing
        $(window).resize(function () {
            recalculateCenterInDiv();
        });
    });
</script>
<script src="/js/ga.js"></script>

<!-- Typekit -->
<script src="https://use.typekit.net/aey8wha.js"></script>
<script>
    try {
        Typekit.load({
            async: true
        });
    } catch (e) {}
</script>
