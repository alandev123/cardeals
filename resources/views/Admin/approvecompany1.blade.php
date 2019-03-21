
@include('Admin.adminheader');

<div style="margin-top:10%;">
<table border="4">
<thead>
<tr>
<td>Number</td>
<td>Email ID</td>
<td>CIN number</td>
<td>Head Office</td>
<td>Website</td>
<td>Established Year</td>
<td>Action</td>
<td>More Details</td>
</tr>
</thead>
<tbody>
<form name="" action="" method="POST">
@csrf
@isset($request)
{{$count=1}}
@foreach($request as $cmp)
<tr>
<td>{{$count}}</td>
<td>{{$cmp->email}}</td>
<td>{{$cmp->cin}}</td>
<td>{{$cmp->headoffice}}</td>
<td>{{$cmp->website}}</td>
<td>{{$cmp->year}}</td>
<td class="align-content-center">
<input type="button" name="approve" id="" value="APPROVE">
</td>
<td class="align-content-center">
<input type="button" name="more" id="" value="MORE">
</td>
</tr>
{{$count=$count+1}}
@endforeach
@endisset
</form>
</tbody>
</table>
</div>
@include('Admin.adminfooter');
