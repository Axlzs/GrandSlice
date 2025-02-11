<section class="chefs">
    <div class="section-heading">
      <h2>Our chefs </h2>
      <h6>We offer the best ingredients for you</h6>
    </div>
    <div class="row">
      @foreach($data as $data)
      <div class="chefs">
        <img style="height: 500px;" src="/chefimage/{{$data->image}}" alt="insert an epicimage ">
        <h4>{{$data->name}}</h4>
        <span>{{$data->speciality}}</span>
      </div>
      @endforeach
    </div>
</section>