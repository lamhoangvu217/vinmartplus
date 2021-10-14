@extends('frontend.layouts.main')
@section('content')
@include('frontend.partials.banner')   

<div id="myModal" class="modal fade"  tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
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