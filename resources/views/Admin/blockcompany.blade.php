
       
@include('Admin.adminheader');
<script src='js/viewmore.js'></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="js/viewmore.js"></script>
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">List of Companies</h2>
					<div class="panel-body widget-shadow">
						<h4>Company Table:</h4>
						<table class="table">
							<thead>
								<tr>
								  <th>#</th>
								  <td>Email ID</td>
                                  <td>CIN number</td>
                                  <td>Head Office</td>
                                  <td>Website</td>
                                  <td>Established Year</td>
                                  <td>Action</td>
                                  
								</tr>
							</thead>
							<tbody>
                           
                               
                                @isset($request)
                               
                                @foreach($request as $cmp)
                                <tr>
                                <td>#</td>
                                <td>{{$cmp->email}}</td>
                                <td>{{$cmp->cin}}</td>
                                <td>{{$cmp->headoffice}}</td>
                                <td>{{$cmp->website}}</td>
                                <td>{{$cmp->year}}</td>
                                 
                                <td><a href="{{url('blockcompany/'.$cmp->email)}}">Block</a></td>
                                
                                <!-- <td class="align-content-center">
                                <input type="button" name="more" id="" value="MORE" onClick="viewmore('{{$cmp->email}}')">
                                </td> -->
                                </tr>
                               
                                @endforeach
                                @endisset
                               
							</tbody>
						</table>
					</div>
					<!-- <div class="bs-example widget-shadow" data-example-id="bordered-table"> 
						<h4>Bordered Basic Table:</h4>
						<table class="table table-bordered"> <thead> 
                        <thead>
								<tr>
								  <th>#</th>
								  <td>Email ID</td>
                                  <td>CIN number</td>
                                  <td>Head Office</td>
                                  <td>Website</td>
                                  <td>Established Year</td>
                                  <td>Action</td>
                                  
								</tr>
							</thead>
							<tbody>
                            
                                
                                @isset($request)
                               
                                @foreach($request as $cmpp)
                                <tr>
                                <td>#</td>
                                <td>{{$cmpp->email}}</td>
                                <td>{{$cmpp->cin}}</td>
                                <td>{{$cmpp->headoffice}}</td>
                                <td>{{$cmpp->website}}</td>
                                <td>{{$cmpp->year}}</td>
                                
                                <td><a href="{{url('unblockcompany/'.$cmpp->email)}}">Unblock</a></td>
                                
                                <td class="align-content-center">
                                <input type="button" name="more" id="" value="MORE" onClick="viewmore('{{$cmp->email}}')">
                                </td> 
                                </tr>
                               
                                @endforeach
                                @endisset
                                
							</tbody></table>
					</div> -->
					
				</div>
			</div>
		</div>
        @include('Admin.adminfooter');
