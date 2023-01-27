<div class="card">
    <div class="card-header"><h2><span class="text-dp">Contact</span> <span class="text-dp-yellow">Us</span></h2> </div>
    <div class="card-body">
        <div class="col-12">
        <img class="navimage2 mx-auto d-block" src="{{ asset('img/logoDP.png') }}" alt="DedicatedPeople">
        <br>
        </div>
        <form id="contact-form" action="/send" method="POST">
            @csrf
            <div class="form-group">
            <h4 for="email">Full name:</h4>
            <input type="text" class="form-control" placeholder="Enter name" id="name-form" name="name" required>
            </div>
            <div class="form-group">
                <h4 for="email">Email address:</h4>
                <input type="email" class="form-control" placeholder="Enter email" id="email-form" name="email" required>
            </div>
            <div class="form-group">
                <h4 for="pwd">Phone:</h4>
                <input type="number" class="form-control" placeholder="Enter Phone" id="phone-form" name="phone" required>
            </div>
            <div class="form-group">
                    <h4 for="message-form">Message:</h4>
                    <textarea class="form-control" rows="5" id="message-form" placeholder="Enter Message" name="description" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" >Submit</button>
        </form>
    </div> 
</div>