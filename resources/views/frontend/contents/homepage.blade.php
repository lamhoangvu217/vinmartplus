@extends('frontend.layouts.main')
@section('content')
@include('frontend.partials.banner')   

<div id="myModal" class="modal fade"  tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            {{-- <div class="modal-header">
                <h5 class="modal-title">Subscribe our Newsletter</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Subscribe to our mailing list to get the latest updates straight in your inbox.</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div> --}}
            <img src="https://cdn.brvn.vn/topics/400px/2018/11633_Vinmart.png" alt="">
        </div>
    </div>
</div>
<script src="{{ asset('urdan/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>
@endsection