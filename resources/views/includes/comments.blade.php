<div class="post-comments">
                <h3 class="post-comments-title widget-title">Comments</h3>
                <ul class="commentlist">

                    @if(isset($comments))

                	@foreach($comments as $comment)
                    
                    <li>
                        <div class="comment">
                           
                            <div class="comment-box">
                                <div class="first-box">
                                    <div class="comment-author-meta">
                                        <strong>{{$comment->name}}</strong>
                                        <div class="date">{{$comment->updated_at->format('Y/m')}}</div>
                                    </div>
                                    
                                </div>
                                <div class="comment-content">{{$comment->comment}}
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    @endif

                </ul>
            </div>
            <div class="post-reply">
                <h3 class="post-title widget-title">Leave A Reply</h3>
                <form action="{{route('comment-form')}}" class="comment-form" method="post">
                	<input type="hidden" name="tool_id" value="@yield('comment_post_ID')" id="comment_post_ID">
                	@csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <label>First Name *</label>
                                <input type="text" name="name" class="form-control" value="">
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <label>Email *</label>
                                <input type="text" name="email" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Your Comments</label>
                                <textarea name="comment" id="message" tabindex="2" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-submit">Submit</button>
                </form>
            </div>