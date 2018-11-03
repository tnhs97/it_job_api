@extends('masterAdmin')
@section('content')
<div class="content-detached content-right">
  <div class="content-body">
    <section class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-head">
            <div class="card-header">
              <h4 class="card-title">All SmallCategory
              </h4>
              <a class="heading-elements-toggle">
                <i class="la la-ellipsis-h font-medium-3">
                </i>
              </a>
              <div class="heading-elements">
                <a href="{{asset('getaddSmallCategory')}}">
                  <button class="btn btn-primary btn-sm">
                    <i class="ft-plus white">Add new
                    </i> 
                  </button>
                </a>
              </div>
            </div>
            <div class="card-header">
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ft-search"></i></span>
                        </div>
                        <input type="text" class="form-control ac-default" />
                      </div>
            </div>
          </div>
          <div class="card-content">
            <div class="card-body">
              
              <!-- Task List table -->
              <div class="table-responsive">
                 <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
     <thead>
                      <tr>
                        <th>
                        </th>
                        <th>ID
                        </th>
                        <th>Name
                        </th>
                        <th>Description
                        </th>
                        <th>ID Category
                        </th>
                        <th>Actions
                        </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $stt=0 ?>
                    @foreach($smallcategories as $smallcategory)
                    <?php $stt=$stt+1 ?>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>
                        {!! $stt !!}
                      </td>
                      <td class="text-center">
                        {{ $smallcategory-> nameSmallCate }}
                      </td>
                      <td>
                        {{ $smallcategory-> descriptions }}
                      </td>
                      <td class="text-center">
                         {{ $smallcategory-> id_category }}
                      </td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right">
                            <i class="ft-settings">
                            </i>
                          </button>
                          <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="{{route('geteditSmallCategory',$smallcategory['id'])}}" class="dropdown-item">
                              <i class="ft-edit-2">
                              </i> Edit
                            </a>
                            <a onclick="return xacnhanxoa(' Bạn có chắc muốn xóa không !!! ')" href="{{route('getdeleteSmallCategory',$smallcategory['id'])}}" class="dropdown-item">
                              <i class="ft-trash-2">
                              </i> Delete
                            </a>
                          </span>
                        </span>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection
