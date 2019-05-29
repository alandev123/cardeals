
       
@include('Admin.adminheader');
<script src='js/viewmore.js'></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="js/viewmore.js"></script>
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Manufacturer Registration</h2>
					<div class="panel-body widget-shadow">
						<h4>Genrate Links:</h4>
						<table class="table">
							<tr>
                                <form method="POST" action="/featuredadd"  enctype="multipart/form-data">
                                    @csrf
                                    
                                {{-- <td> Make&nbsp;&nbsp;<select>
                                <option selected="selected" disabled="disabled" name="make">-Select-</option> 
                                @foreach($request as $feat)
                                <option value="{{$feat->id}}">{{$feat->name}}</option>   
                                @endforeach
                                </select> --}}
                           <td>Make&nbsp; &nbsp; <input type="text" name="make" required></td>
                            <td>Model&nbsp;&nbsp;<input type="text" name="model" required></td>
                            <td><input type="file" name="image" id="image" required></td>
                            <td></td>
                                    <td><Input type="submit" name="submit" value="Add"></td>
                                        

                                    </form>
                                </tr>
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
