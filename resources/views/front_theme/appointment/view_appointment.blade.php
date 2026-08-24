@extends('front_theme._mastertheme')

@section('fornt_body')

 
    @if ($appointments->isEmpty())

        <div class="card container mt-5">

            <div class="empty">

                <div class="ic">
                    <i class="bi bi-calendar-x"></i>
                </div>

                <h3>No appointments booked yet</h3>

                <p>
                    Book your child's vaccination appointment to see it here.
                </p>

                <a href="{{ route('parent.appointment') }}" class="btn btn-primary">

                    <i class="bi bi-calendar-plus"></i>
                    Book Appointment

                </a>

            </div>

        </div>

    @else

        <div class="card container mt-5">

            <div class="card-head">

                <div>

                    <span class="eyebrow">
                        <i class="bi bi-calendar-check"></i>
                        Appointments
                    </span>

                    <h2>My Appointments</h2>

                </div>

                <a href="{{ route('parent.appointment') }}" class="btn btn-sage btn-sm">

                    <i class="bi bi-plus-lg"></i>
                    Book Another

                </a>

            </div>


          
            @if (session('success'))

                <div class="alert alert-success">
                    {{ session('success') }}
                </div>

            @endif


            <div class="child-grid">


              
                @foreach ($appointments as $appointment)

                        <div class="child-card">


                            <div class="child-avatar">

                                {{ substr($appointment->child->first_name, 0, 1) }}
                                {{ substr($appointment->child->last_name, 0, 1) }}

                            </div>


                            <h4>

                                {{ $appointment->child->first_name }}
                                {{ $appointment->child->last_name }}

                            </h4>


                            <div class="meta">

                                <i class="bi bi-syringe"></i>

                                {{ $appointment->vaccine->name }}

                            </div>


                            
                            <div class="meta">

                                <i class="bi bi-hospital"></i>

                                {{ $appointment->hospital->name }}

                            </div>


                   
                    <div class="meta">

                        @if ($appointment->status == 'pending')
                            <span class="status-badge status-pending">Pending Approval</span>
                        @elseif ($appointment->status == 'approved')
                            <span class="status-badge status-confirmed">Approved</span>
                        @elseif ($appointment->status == 'completed')
                            <span class="status-badge status-confirmed">Completed</span>
                        @else
                            <span class="status-badge status-cancelled">Cancelled</span>
                        @endif

                    </div>


                   
                    @if ($appointment->status == 'pending')

                        <div class="icon-actions">

                           
                            <a href="{{ route('parent.editAppointment', $appointment->id) }}" class="icon-action icon-edit" title="Edit">
                                <i class="fa-solid fa-pen"></i>
                            </a>

                          
                            <form action="{{ route('parent.cancelAppointment', $appointment->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="icon-action icon-delete" title="Cancel"
                                    onclick="return confirm('Cancel this appointment?')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>

                        </div>

                    @endif


                        </div>

                @endforeach


            </div>

        </div>

    @endif

@endsection