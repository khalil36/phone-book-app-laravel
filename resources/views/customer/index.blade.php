@include('components.header')
<div class="row mt-5">
    <div class="col-md-8 offset-2">
        <div class="card box-shadow border-radius-small">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Customers</h4>
                    </div>
                    <div class="col-md-6 text-right">
                        <a class="btn btn-success underline-none" href="/create"> Add New </a>
                    </div>
                </div>
                
            </div>
            <div class="card-body">
                @if(Session::has('customer_deleted'))
                <div class="alert alert-danger fade-message">
                    {{Session::get('customer_deleted')}}
                </div>
                @elseif(Session::has('failed'))
                <div class="alert alert-danger fade-message">
                    {{Session::get('failed')}}
                </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Last</th>
                            <th scope="col">First</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                        <tr>
                            
                            <td>{{ $customer->last_name }}</td>
                            <td>{{ $customer->first_name }}</td>
                            <td class="customer-phone">{{ $customer->phone }}</td>
                            <td>{{ $customer->email }}</td>
                            <td><a class="btn btn-info" href="/edit/{{$customer->id}}">Edit</a>&nbsp;&nbsp;

                                  <div class="modal fade" id="delete-{{$customer->id}}" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title text-center font-weight-bold" style="width: 100%">Are you sure you want to delete this customer?</h5>
                                      </div>
                                      <div class="modal-body text-center">
                                        <div class="delete-data">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Last</th>
                                                        <th>First</th>
                                                        <th>Phone</th>
                                                        <th>Email</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $customer->last_name }}</td>
                                                        <td>{{ $customer->first_name }}</td>
                                                        <td class="customer-phone">{{ $customer->phone }}</td>
                                                        <td>{{ $customer->email }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                          <!-- <p><strong>Last : </strong><span></span></p>
                                          <p><strong>First : </strong><span></span></p>
                                          <p><strong>Phone : </strong><span class="customer-phone"></span></p>
                                          <p><strong>Email : </strong><span></span></p> -->
                                        </div>
                                        <form action="/delete/{{$customer->id}}" method="GET" style="display:inline-block;">
                                          <input type="submit" class="btn btn-danger" value="Yes">
                                        </form>
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                                      </div>
                                      
                                    </div>
                                   </div>
                                   </div>
                                    <button data-toggle="modal" data-target="#delete-{{$customer->id}}" class="btn btn-danger" id="btn-delete">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('components.footer')