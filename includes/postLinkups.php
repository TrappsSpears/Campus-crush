<div class="posts">
    <div class="con_form">
        <?php if($userLogged){ ?>
    <div class="post_head">
            <div class="select-post-type">
                <p id="C_con">
                  Link up?  
                    <button class="dot" id="CC_span"></button> 
                </p>
                
                <div class="post_linkups" id="post_linkups">
                    <form action="#">
                    <div class="input-form-linkups">
                        <textarea name="hotConfession" placeholder="what do you need...." id="textarea_Post"></textarea>
                        <div>
                        <input type="text" placeholder='#YourType' name='topic'>
                        <input type="text" placeholder='@YourGeneralLocation' name='location'>                        
                        </div>
                    </div>
                    <div>
                        <button type="submit" id="post_btn">Post</button>
                    </div>
                    </form>
                </div>

            </div>   
            <small id='privacy_msg' class='privacy_msg'>Don Worry You got all the <a href="#" style="color:blueviolet"> privacy</a> YOU need...No one will ever know who post this</small> 
        </div>
        <?php } ?>
    </div>
   
    <div class="post-container">
        <div class="post-head">
            <small>head</small>
        </div>
<div class="post-box">
    'post-box
</div>
<div class="comment">
    <div class="react">
        R
    </div>
    <div class="comment_in">
        <input type="text" placeholder="Reply">
    </div>
</div>
    </div>
</div>
<script>
    // when user wanna post somthing
    const openPostBtn = document.querySelector('#C_con');
    const post_Box = document.querySelector('#post_linkups');
    const privacy_msg = document.querySelector('#privacy_msg');
    const CC_span = document.querySelector('#CC_span');

    openPostBtn.addEventListener('click', function(){
        post_Box.classList.toggle('post_linkups_active');
        privacy_msg.classList.toggle('privacy_msg-active');
        CC_span.classList.toggle('dot-active');
    })
</script>