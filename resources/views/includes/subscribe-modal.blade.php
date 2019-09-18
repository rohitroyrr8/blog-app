<!-- subscirbe modal -->
<div id="subscribe_modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="">
      <div class="modal-body">
       <div style="text-align:center;width:100%">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <img src="https://blog-cdn.feedspot.com/wp-content/uploads/2017/03/premade-image-06.png?73edd9" style=" width: 100px;height: 100px;" scale="0">
            </div>
            <h2 style="    color: #4c4a4a;margin: 21px 50px;" class="text-center">Get trending posts delivered directly into your inbox</h2>

            <div>
            <form action="{{route('new_subscriber')}}" method="POST">
                <div class="row" style="max-width: 250px; display: block;margin: auto;">
                     @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <input class="form-control" type="name" name="text" placeholder="Enter Name" style="    height: 42px; font-size: 16px;">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input class="form-control" type="email" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter Email-address" required="" style="    height: 42px; font-size: 16px;">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" name="btn btn-block" value="Subscribe" style="
                                padding: 6px 30px; color: white; background: #fc3c2d;     height: 42px; font-size: 16px; width: 100%">
                        </div>
                    </div>
                </div>
            </form>
        </div>
      </div>
      
    </div>
  </div>
</div>
<script type="text/javascript" src="http://9scroob.com/js/jquery.js"></script>
<script >
     $('').ready(function() {
        setTimeout(function() {
           $('#subscribe_modal').modal();
        }, 10000);
     });
</script>
<!-- ending of subscribe modal -->