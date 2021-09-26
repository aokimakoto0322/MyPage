@section('footer')
    <footer class="footer">
        <div class="container">
            <p class="text-muted">Copyright</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/slick.min.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script type="text/javascript">
        $(document).ready (function() {
            $(".full-screen").slick({
                centerMode: true,
                centerPadding: '5%',
                dots: true,
                autoplay: true,
                autoplaySpeed: 5000,
                speed: 1000,
                infinite: true,
            });
        });
    </script>
@endsection