<h3 class="page-title">New Topic</h3>

<form action="/discuss/new" method="POST" class="form-horizontal" style="width: 800px">
        <div class="form-group">
            <label class="control-label col-sm-5" for="pid">Problem ID</label>
            <div class="col-sm-7">
                <input class="form-control" type="text" class="input-xlarge span1" name="pid" id="pid"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-5" for="title">Title</label>
            <div class="col-sm-7">
                <input class="form-control" type="text" class="input-xlarge span4" name="title" id="title"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-5" for="content">Content</label>
            <div class="col-sm-7">
                <textarea class="form-control" rows="10" cols="10" class="span6" id="content" name="content"></textarea>
            </div>
        </div>
    <div class="form-group">
        <div class="col-sm-offset-5 col-sm-7">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn">Cancel</button>
        </div>
    </div>
</form>