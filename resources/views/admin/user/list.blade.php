@extends('admin.master')
@section('content')
@section('controller','User')
@section('action','list')
<!-- /.col-lg-12 -->

 <!-- datatables plugin -->
                        <div class="wrapper wrapper-white">
                           
                            <div class="table-responsive">
                                <table id="listcatebds" class="table table-bordered table-striped table-sortable">
                                    <thead>
                                        <tr> 
                                            <th>ID</th> 
                                            <th>Avatar</th> 
                                            <th>Tên thành viên</th> 
                                            <th>Email</th>  
                                            <th>SDT</th>  
                                            <th>Nhóm</th>  
                                            <th>Tài khoản</th>  
                                            <th>Số tin - VIP</th>  
                                            <th>Action</th>
                                        </tr>
                                    </thead>                               
                                    <tbody>
                                        
                                        @foreach($user as $itemuser)
                                        <tr class="odd gradeX" align="center">
                                            <td>{!!$itemuser['id']!!}</td>
                                            <td><img src="assets/images/users/user_1.jpg" width="30"></td> 
                                            <td>{!!$itemuser['name']!!}</td> 
                                            <td>{!!$itemuser['email']!!}</td>
                                            <td>{!!$itemuser['phonenumber']!!}</td>
                                            <td>
                                                @if($itemuser['id']==1 && $itemuser['level']==1)
                                                <span class="btn btn-danger btn-xs">SupperAdmin</span>
                                                @elseif ($itemuser['level']==1)
                                                <span class="btn btn-primary btn-xs">Admin</span>
                                                @else
                                                <span class="btn btn-default btn-xs">Member</span>
                                                @endif
                                            </td>
                                            <td>
                                            <script>
                                             Number.prototype.format = function(n, x) {
                                                var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
                                                return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&,');
                                            }; 
                                                var numbers =  {!!$itemuser['curent_money']!!};
                                                document.write(numbers.format(0) + ' VND');
                                             </script>

                                            </td>
                                            <td>25 - <span class="btn btn-danger btn-clean btn-rounded btn-xs">5</span></td>
                                            <td>
                                                <a href="{!!URL::route('admin.user.getEdit',$itemuser['id'])!!}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                                <a href="{!!URL::route('admin.user.getDelete',$itemuser['id'])!!}" nclick="return xacnhanxoa('bạn có chắc là muốn xóa không?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></i></a> 
                                            </td>
                                             
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>                        
                        <!-- ./datatables plugin -->

@endsection           