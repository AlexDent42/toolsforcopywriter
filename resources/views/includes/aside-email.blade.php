<aside class="widget widget_newletters">
    <h3 class="widget-title">Newsletters</h3>
        <div class="newletter-form">

                <form action="{{route('email-subscribe')}}" method="post">
                    @csrf
                    <input type="text" name="email" placeholder="Your email address..." class="form-control">
                    <button type="submit" class="btn btn-submit">Submit</button>
                </form>

        </div>
</aside>