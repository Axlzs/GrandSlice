<section class="section" id="reserve">
  <div class="row">
    <div class="left text content">
      <div class="section-heading">
        <h2>You can make a reservation right here</h2>
      </div>
      <!-- can make a paragraph for text -->
    </div>
  </div>
  <form action="{{url('reservation')}}" method="post">
    @csrf
     <div class="row">
       <h4>Table Reservation</h4>
        <div class="reservation-table">
          <fieldset>
             <input name="name" type="text" id="name" placeholder="Your Name*" required="">
          </fieldset>
        </div>
        <div class="reservation-table">
          <fieldset>
            <input name="email" type="text" id="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" placeholder="Your Email Address*" required="">
          </fieldset>
        </div>
        <div class="reservation-table">
          <fieldset>
           <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
          </fieldset>
        </div>
        <div class="reservation-table">
          <fieldset>
            <input type="number" name="guest" min="1" placeholder="Number Of Guests" required>
          </fieldset>
        </div>
        <fieldset>
        <div class="reservation-table">
          <div class="input-date" data-date-format="dd/mm/yyyy">
            <input type="text" name="date" id="date" placeholder="dd/mm/yyyy" class="datepicker">
            <div class="input-group-addon">
              <span class="yes"></span>
            </div>
          </div>
        </div>
      </fieldset>

      <script>
        $(document).ready(function() {
          $(".datepicker").datepicker({
            dateFormat: "dd/mm/yy"
          });
        });
      </script>
        <div class="reservation-table">
      <fieldset>
        <input type="time" name="time" id="timeInput">
      </fieldset>

      <script>
        const timeInput = document.getElementById('timeInput');
        const minTime = '09:00'; // Replace with the desired opening time
        const maxTime = '18:00'; // Replace with the desired closing time

        timeInput.setAttribute('min', minTime);
        timeInput.setAttribute('max', maxTime);
      </script>
      </div>
      <div class="reservation-table">
        <fieldset>
          <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
        </fieldset>
      </div>
    </div>
    <div class="reservation-table">
      <fieldset>
        <input type="submit" value="Make Reservation">
      </fieldset>
    </div>
  </form>
 </section>