<div id="demo" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    @for ($i=1; $i <= 4; $i++)
      @php echo $i == 1 ? "<div class='carousel-item active'>" : "<div class='carousel-item'>" @endphp

        <img src="images/c2_{{$i}}.jpg" alt="slide{{$i}}" style="width:100%;">
      </div>
    @endfor
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev"> {{-- Left and right controls --}}
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
