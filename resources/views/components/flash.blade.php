@if (session()->has('message'))
<div class="alert alert-danger" id="flashmessage" role="alert">
    <div>
        {{ session('message') }}
    </div>
</div>
@endif

<script>
    setTimeout(function () {
            $("#flashmessage").hide();
        }, 4000);
     
</script>