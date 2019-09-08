<style>
  .new_field_locator {
    border-radius: 2px;
    border: 3px solid #c8c8c8;
    width: 50px;
    height: 50px;
    padding-right: 3px;
    padding-left: 3px;
    background-color: white;
  }

  textarea {
    resize: none;
  }


  /* Tooltip container */
  .tooltip {
    position: relative;
    display: inline-block;
  }

  /* Tooltip text */
  .tooltip .tooltiptext {
    visibility: hidden;
    width: 400px;
    background-color: #555;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;

    /* Position the tooltip text */
    position: absolute;
    z-index: 250;
    top: 20px;
    left: 200%; 
    margin-left: -60px;

    /* Fade in tooltip */
    opacity: 0;
    transition: opacity 0.3s;
  }

  /* Show the tooltip text when you mouse over the tooltip container */
  .tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
  }  
</style>
<script>
$(document).ready(function(){
  $(".new_field_locator").click(function(){
    $(".new_field_content_form").append('<textarea type="text" name="a" style="width: 90%;"></textarea>');
  });
});
</script>
<div class="print_area">
    <div class="tooltip">
      <input type="submit" class="new_field_locator" value="+" name="new_field_locator">
      <span class="tooltiptext">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut deserunt animi maxime aperiam architecto expedita non asperiores illum, repudiandae laboriosam. Dolorem, perferendis doloremque? Necessitatibus atque enim aspernatur ex dolor voluptas!</span>
    </div> 
    <br>
    <input type="text" name="a" style="width: 90%;" value="Title" autofocus>
    <div class="new_field_content">
        <form class="new_field_content_form">
        </form> 
    </div>    
</div>
