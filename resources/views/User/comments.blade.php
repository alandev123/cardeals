@if(session()->has('email'))
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
.rating {
    float:left;
}

.rating:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0,0,0,0);
}

.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:200%;
    line-height:1.2;
    color:#ddd;
    text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:before {
    content: '★ ';
}

.rating > input:checked ~ label {
    color: #f70;
    text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
    color: gold;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > input:checked + label:hover,
.rating > input:checked + label:hover ~ label,
.rating > input:checked ~ label:hover,
.rating > input:checked ~ label:hover ~ label,
.rating > label:hover ~ input:checked ~ label {
    color: #ea0;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > label:active {
    position:relative;
    top:2px;
    left:2px;
}
	</style>
    <!-- Title -->
    <title>Car-Deals</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/logo1.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>
@include('User.userheader')
<body>
<div style="margin-top:5%; margin-left:1%">
	@foreach($rate as $cm)
	<form action="/addrate" method="POST">
		@csrf
<input type="hidden" name="iid" value="{{$cm->car_id}}">
	<legend>Model Name:</legend> <input type="text" value="{{$cm->carname}}" name="carname" readonly class="form-control" style="width:250px;">
	@endforeach
	<br>
	<fieldset class="rating">
	<legend>Please rate:</legend>
	<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
	<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
	<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Average">3 stars</label>
	<input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Not Good">2 stars</label>
	<input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Bad">1 star</label>
</fieldset>
<br>
<br>
<br>
<br>
<legend>Comment</legend>
<textarea name="comment" class="form-control" style="width:400px;" rows="5" required></textarea>
<br>
<input type="submit" class="form-control btn-success" value="Add your Rating" style="width:300px;">
@if(isset($success))
{{$success}}
@endif
</form>

</div>

<script src="js/jquery.min.js"></script>
<!-- Popper -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- All Plugins -->
<script src="js/roberto.bundle.js"></script>
<!-- Active -->
<script src="js/default-assets/active.js"></script>
</body>

@endif
