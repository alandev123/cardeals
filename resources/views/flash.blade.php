 @if (session('status'))

                        <div class="alert alert-success alert-block">
                        	<button type="button" class="close" data-dismiss="alert">          
                           <strong> {{ session('status') }}&nbsp &nbsp &nbsp &nbsp</strong>x</button>
                        </div>
                    @endif
  @if (session('error'))
                        <div class="alert alert-danger alert-block">
                        	<button type="button" class="close" data-dismiss="alert">               x</button>
                           <strong> {{ session('error') }}</strong>
                        </div>
                    @endif