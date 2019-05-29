
       
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
								  <td>Company Name</td>
                                  <td>Model</td>
                                  <td>Image</td>
                                  <td>Expected Price</td>
                                  <td>Tag Line</td>
                                  <td>Expected Launch</td>
                                  
								</tr>
							</thead>
							<tbody>
                            <form action="/postad" method="POST">
                                @csrf
                                @isset($request)
                               
                                @foreach($request as $cmp)
                                <tr>
                                <td>#</td>
                                <td>{{$cmp->name}}</td>
                                <td>{{$cmp->model}}</td>
                                <td><img src="storage/{{$cmp->image}}" style="width:80px;height:50px"></img></td>
                                <td>{{$cmp->price}} &nbsp; Lakh*</td>
                                <td>{{$cmp->tag}}</td>
                                <td>{{$cmp->date}}</td>
                                
                                <td><a href="{{url('postad/'.$cmp->adid)}}">Post Ad</a></td>
                                
                                
                                <td class="align-content-center">
                                        <a href="{{url('removead/'.$cmp->adid)}}">Remove Ad</a>
                                </td>
                                </tr>
                               
                                @endforeach
                                @endisset
                                </form>
							</tbody>
						</table>
					</div>
					
					<!--div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Hover Rows Table:</h4>
						<table class="table table-hover"> <thead> <tr> <th>#</th> <th>First Name</th> <th>Last Name</th> <th>Username</th> </tr> </thead> <tbody> <tr> <th scope="row">1</th> <td>Mark</td> <td>Otto</td> <td>@mdo</td> </tr> <tr> <th scope="row">2</th> <td>Jacob</td> <td>Thornton</td> <td>@fat</td> </tr> <tr> <th scope="row">3</th> <td>Larry</td> <td>the Bird</td> <td>@twitter</td> </tr> </tbody> </table>
					</div>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Colored Rows Table:</h4>
						<table class="table"> <thead> <tr> <th>#</th> <th>Column heading</th> <th>Column heading</th> <th>Column heading</th> </tr> </thead> <tbody> <tr class="active"> <th scope="row">1</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr> <th scope="row">2</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr class="success"> <th scope="row">3</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr> <th scope="row">4</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr class="info"> <th scope="row">5</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr> <th scope="row">6</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr class="warning"> <th scope="row">7</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr> <th scope="row">8</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr class="danger"> <th scope="row">9</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> </tbody> </table> 
					</div>
					<div class="table-responsive bs-example widget-shadow">
						<h4>Responsive Table:</h4>
						<table class="table table-bordered"> <thead> <tr> <th>#</th> <th>Table heading</th> <th>Table heading</th> <th>Table heading</th> <th>Table heading</th> <th>Table heading</th> <th>Table heading</th> </tr> </thead> <tbody> <tr> <th scope="row">1</th> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> </tr> <tr> <th scope="row">2</th> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> </tr> <tr> <th scope="row">3</th> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> <td>Table cell</td> </tr> </tbody> </table> 
					</div> -->
				</div>
			</div>
		</div>
        @include('Admin.adminfooter');