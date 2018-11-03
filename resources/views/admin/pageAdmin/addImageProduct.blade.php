@extends('masterAdmin')
@section('content')      
<div class="content-detached content-right">
  <div class="content-body">
    <!-- Basic form layout section start -->
    <section id="horizontal-form-layouts">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-content collpase show">
              <div class="card-body">
                <form class="form form-horizontal">
                  <div class="form-body">
                    <h4 class="form-section">
                      <i class="ft-clipboard">
                      </i> Add new
                    </h4>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="projectinput5">ID product
                      </label>
                      <div class="col-md-9">
                        <select id="projectinput6" name="interested" class="form-control">
                          <option value="none" selected="" disabled="">Categories name
                          </option>
                          <option value="design">design
                          </option>
                          <option value="development">development
                          </option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="projectinput9">Url Image
                      </label>
                      <div class="col-md-9">
                          <fieldset class="form-group">
                            <input type="file" class="form-control-file" id="exampleInputFile">
                          </fieldset>
                      </div>
                    </div>
                  </div>
                  <div class="form-actions">
                    <a href="categories">
                      <button type="button" class="btn btn-warning mr-1">
                        <i class="ft-x">
                        </i> Cancel
                      </button>
                    </a>
                    <button type="submit" class="btn btn-primary">
                      <i class="la la-check-square-o">
                      </i> Save
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- // Basic form layout section end -->
  </div>
</div>
@endsection
