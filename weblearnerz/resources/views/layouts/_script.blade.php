<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('.navbar-nav [data-toggle="tooltip"]').tooltip();
        $('.navbar-twitch-toggle').on('click', function(event) {
            event.preventDefault();
            $('.navbar-twitch').toggleClass('open');
        });

        $('.delete-confirm').click(function(event) {
            if(confirm('Are you sure?'))
            {
                location = $(this).data('href');
            }
        });
        $(".content").on('click','.panel-heading',function(){
            $(".panel-body").slideUp("slow");
            var el = $(this).parent(".panel-default").children(".panel-body");
            el.css('display') == 'block' ?  el.slideUp('slow') : el.slideDown('slow')
        });
    });
</script>