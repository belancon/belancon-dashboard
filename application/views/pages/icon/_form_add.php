<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Data Master</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="content">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Icon Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" placeholder="Icon Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="category" class="col-sm-2 control-label">Icon Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="category">
                                      <option>People</option>
                                      <option>Natural</option>
                                      <option>Music</option>
                                      <option>Social Media</option>         
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tags" class="col-sm-2 control-label">Icon Tags</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="tags" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tags" class="col-sm-2 control-label">Icon Type</label>
                                <div class="col-sm-10">
                                    <label class="radio radio-inline">
                                        <input type="radio" name="type" value="free" data-toggle="radio"> Free
                                    </label>
                                    <label class="radio radio-inline">
                                        <input type="radio" name="type" value="paid" data-toggle="radio"> Paid
                                    </label>                                  
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="price" class="col-sm-2 control-label">Icon Price</label>
                                <div class="col-sm-10">
                                   <input type="text" class="form-control" name="price" placeholder="Icon Price">
                                </div>
                            </div>                       
                    </div>
                    <div class="header">
                        <h4 class="title">File Upload</h4>
                    </div>
                    <div class="content">
                        <div class="form-group">
                            <label for="price" class="col-sm-2 control-label">Icon File Vector</label>
                            <div class="col-sm-10">
                                <input type="file" id="exampleInputFile">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="price" class="col-sm-2 control-label">Icon File Photoshop</label>
                            <div class="col-sm-10">
                                <input type="file" id="exampleInputFile">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="price" class="col-sm-2 control-label">Icon File Ilustrator</label>
                            <div class="col-sm-10">
                                <input type="file" id="exampleInputFile">
                            </div>
                        </div>
                    </div>
                    
                    <div class="content">
                            <button type="submit" class="btn btn-info btn-fill pull-right">Add Icon</button>                           
                            <button type="reset" class="btn btn-warning btn-fill pull-right">Reset</button>
                            <div class="clearfix"></div>
                    </div>
                    </form>
                </div>
            </div>           
        </div>
    </div>
</div>