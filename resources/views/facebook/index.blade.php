<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <title>Social Book</title>
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('js/modern.js') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    
    <nav>
        <div class="nav-left">
            <img src="{{ asset('images/logo.png') }}" class="logo">
            <ul>
                <li><img src="{{ asset('images/notification.png') }}" ></li>
                <li><img src="{{ asset('images/inbox.png') }}"></li>
                <li><img src="{{ asset('images/video.png') }}"></li>
                <li><img src="{{ asset('images/video.png') }}"></li>
            </ul>
        </div>
        <div class="nav-right">
        <div class="search-box">
            <img  src="{{ asset('images/search.png') }}">
            <input id="search" type="text" placeholder="Search">
        </div>
        <div class="nav-user-icon online">
            <a href="{{url('edit_user')}}">
            @foreach($user as $users)
            <img   src="{{ asset('assets/uploads/user/'.$users->profile_image) }}"></a>
            @endforeach
        </div>
        </div>
       <!-- <div class="setting-menu">
        <div class="user-profile">
            <img src="{{ asset('images/profile-pic.png') }}">
            <div>
                <p>chandan kumar</p>
                <a href="#">see your profile </a>
            </div>
        </div>
        <div class="user-profile">
            <img src="{{ asset('images/feedback.png') }}">
            <div>
                <p>Give Feedback</p>
                <a href="#">Help us to improve new desifn </a>
            </div>
        </div>
       </div>  -->
    </nav>
  <div class="container">
    <!-- --------------------left-sidebar------------- -->
    <div class="left-sidebar">
        <div class="imp-links">
            <a href="#"><img src="{{ asset('images/news.png') }}">Latest News</a>
            <a href="#"><img src="{{ asset('images/friends.png') }}">Friends</a>
            <a href="#"><img src="{{ asset('images/group.png') }}">Group</a>
            <a href="#"><img src="{{ asset('images/marketplace.png') }}">Marketplace</a>
            <a href="#"><img src="{{ asset('images/watch.png') }}">Watch</a>
            <a href="#">See More</a>
        </div>
        <div class="shortcut-links">
            <p>Your Shortcuts</p>
            <a href="#"><img src="{{ asset('images/shortcut-1.png') }}">Web Developer</a>
            <a href="#"><img src="{{ asset('images/shortcut-2.png') }}">Web Design Course</a>
            <a href="#"><img src="{{ asset('images/shortcut-3.png') }}">Full Stack Developer</a>
            <a href="#"><img src="{{ asset('images/shortcut-4.png') }}">Website Experts</a>
        </div>
    </div>
    <!-- --------------------main-content------------- -->
    <div class="main-content">
    <div class="story-gallery">
        <div class="story story1">
            <img src="{{ asset('images/upload.png') }}">
            <p>Post Story</p>
        </div>
        <div class="story story2">
            <img src="{{ asset('images/member-1.png') }}">
            <p>Alison</p>
        </div>
        <div class="story story3">
            <img src="{{ asset('images/member-2.png') }}">
            <p>Jakson</p>
        </div>
        <div class="story story4">
            <img src="{{ asset('images/member-3.png') }}">
            <p>Seema</p>
        </div>
        <div class="story story5">
            <img src="{{ asset('images/member-4.png') }}">
            <p>Joe root</p>
        </div>
    </div>

   <div class="write-post-container">
    <div class="user-profile">
            @foreach($user as $users)
            <img src="{{ asset('assets/uploads/user/'.$users->profile_image) }}"></a>
            @endforeach
       <div>
        <p>Johan Nicho</p>
        <small>Public <i class="fa-regular fa-caret-down"></i></small>
       </div>
    </div>
    <div class="post-input-container">
        <textarea rows="3" placeholder="What on your mind , john ?"></textarea>
      <div class="add-post-links">
        <a href=""><img src="{{ asset('images/live-video.png') }}">Live Video</a>
        <a href="{{url('post')}}"><img src="{{ asset('images/photo.png') }}">Photo/Video</a>
        <a href=""><img src="{{ asset('images/feeling.png') }}">Felling/Activity</a>
      </div>
    </div>
   </div>

    <div class="post-container">
        <div class="post-row">
            <div class="user-profile">
            @foreach($user as $users)
            <img src="{{ asset('assets/uploads/user/'.$users->profile_image) }}"></a>
            @endforeach
               <div>
                <p>Johan Nicho</p>
                @foreach($post as $posts)
                <!-- <span>June 24 2022 , 13:40 PM</span> -->
                <span>{{$posts->created_at}}</span>
               </div>
            </div>
            <a href="#"><i class="fa fa-ellipsis-v"></i> </a>
        </div>
      
        <p class="post-text">{{$posts->description}}</p>
       
        <img src="{{ asset('assets/uploads/post/'.$posts->post_image) }}" class="post-img">
         @endforeach
        <div class="post-row">
         <div class="activity-icons">
            <div><img src="{{ asset('images/like-blue.png') }}"> 
             120</div>
             <div><img src="{{ asset('images/comments.png') }}"> 
             45</div>
             <div><img src="{{ asset('images/share.png') }}"> 
             20</div>
         </div>
         <div class="post-profile-icon">
        <img src="{{ asset('images/profile-pic.png') }}">
         </div>
        </div>
    </div>

    <!-- <div class="post-container">
        <div class="post-row">
            <div class="user-profile">
                <img src="{{ asset('images/profile-pic.png') }}">
               <div>
                <p>Johan Nicho</p>
                <span>June 24 2022 , 13:40 PM</span>
               </div>
            </div>
            <a href="#"><i class="fa fa-ellipsis-v"></i> </a>
        </div>
        <p class="post-text">Subscribe Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, deleniti?<a href="#">#Subscribe</a><a href="#">#Like</a></p>
        <img src="{{ asset('images/feed-image-2.png') }}" class="post-img">
        <div class="post-row">
         <div class="activity-icons">
            <div><img src="{{ asset('images/like-blue.png') }}"> 
             120</div>
             <div><img src="{{ asset('images/comments.png') }}"> 
             45</div>
             <div><img src="{{ asset('images/share.png') }}"> 
             20</div>
         </div>
         <div class="post-profile-icon">
        <img src="{{ asset('images/profile-pic.png') }}">
         </div>
        </div>
    </div> -->

    <!-- <div class="post-container">
        <div class="post-row">
            <div class="user-profile">
                <img src="{{ asset('images/profile-pic.png') }}">
               <div>
                <p>Johan Nicho</p>
                <span>June 24 2022 , 13:40 PM</span>
               </div>
            </div>
            <a href="#"><i class="fa fa-ellipsis-v"></i> </a>
        </div>
        <p class="post-text">My big brother get emotinally on sister weeding.</a><a href="#">#Like</a></p>
        <img src="{{ asset('images/chandan.jpg') }}" class="post-img">
        <div class="post-row">
         <div class="activity-icons">
            <div><img src="{{ asset('images/like-blue.png') }}"> 
             120</div>
             <div><img src="{{ asset('images/comments.png') }}"> 
             45</div>
             <div><img src="{{ asset('images/share.png') }}"> 
             20</div>
         </div>
         <div class="post-profile-icon">
        <img src="{{ asset('images/profile-pic.png') }}">
         </div>
        </div>
    </div> -->
       <button type="button" class="load-more-btn">Load More</button>
    </div>
    <!-- --------------------right-sidebar------------- -->
    <div class="right-sidebar">
        <div class="sidebar-title">
            <h4>Events</h4>
            <a href="">See All</a>
        </div>
        <div class="event">
            <div class="left-event">
             <h3>18</h3>
             <span>MArch</span>
            </div>
            <div class="right-event">
              <h4>Social Media</h4>
              <p><i class="fa-solid fa-location-dot"></i>willson Teach Park</p>
              <a href="#">More Info</a>
            </div>
        </div>
        <div class="event">
            <div class="left-event">
             <h3>22</h3>
             <span>JUne</span>
            </div>
            <div class="right-event">
              <h4>Mobile MArketing</h4>
              <p> <i class="fa-solid fa-location-dot"></i>willson Teach Park</p>
              <a href="#">More Info</a>
            </div>
        </div>
        <div class="sidebar-title">
            <h4>Advertisement</h4>
            <a href="">Close</a>
        </div>
        <img src="{{ asset('images/advertisement.png') }}" class="sidebar-ads">
        <div class="sidebar-title">
            <h4>Conversation</h4>
            <a href="">Hide Chat</a>
        </div>
        <div class="online-list">
            <div class="online">
                <img src="{{ asset('images/member-1.png') }}">
            </div>
            <p>Alison mina</p>
        </div>
        <div class="online-list">
            <div class ="online">
                <img src="{{ asset('images/member-2.png') }}">
            </div>
            <p>JAkson</p>
        </div>
        <div class="online-list">
            <div class="online">
                <img src="{{ asset('images/member-3.png') }}">
            </div>
            <p>Mina</p>
        </div>
    </div>
  </div>
<div class="footer">
    <p>Copright 2022 - Chandan Kumar</p>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://kit.fontawesome.com/ad99441f02.js" crossorigin="anonymous"></script>
    <script>
$(document).ready(function(){
    $('#search').on('keyup',function(){
    $value=$(this).val();
    $.ajax({
     type : 'get',
    url : '{{URL::to('search')}}',
   data:{'search':$value},
   success:function(data){
   alert("success");
}
});
     });
});
</script>
</body>
</html> 