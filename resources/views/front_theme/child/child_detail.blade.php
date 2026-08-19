@extends('front_theme._mastertheme')

@section('fornt_body')

    @if(($children ?? collect())->isEmpty())

        <div class="card container mt-5">
            <div class="empty">

                <div class="ic">
                    <i class="bi bi-emoji-smile"></i>
                </div>

                <h3>No children added yet</h3>

                <p>
                    Add your child's details to start tracking their vaccination schedule.
                </p>

                <a href="{{ route('parent.addChild') }}" class="btn btn-primary">
                    <i class="bi bi-person-plus"></i>
                    Add Child
                </a>

            </div>
        </div>

    @else

        {{-- Children List --}}
        <div class="card container mt-5" style="margin-bottom:24px;">

            <div class="card-head">

                <div>
                    <span class="eyebrow">
                        <i class="bi bi-people"></i> Family
                    </span>

                    <h2>All Children</h2>
                </div>

                <a href="{{ route('parent.addChild') }}" class="btn btn-sage btn-sm">

                    <i class="bi bi-plus-lg"></i>
                    Add Another Child

                </a>

            </div>


            <div class="child-grid">

                @foreach($children as $child)

                    <div class="child-card">

                        {{-- Initials (photo column migration mein nahi hai) --}}
                        <div class="child-avatar">
                            {{ strtoupper(substr($child->first_name, 0, 1) . substr($child->last_name, 0, 1)) }}
                        </div>


                        {{-- Name --}}
                        <h4>
                            {{ $child->first_name }} {{ $child->last_name }}
                        </h4>


                        {{-- DOB + Gender --}}
                    <div class="meta">
                        {{ $child->age_display }}
                        &bull;
                        {{ ucfirst($child->gender) }}
                    </div>


                        {{-- Blood Group --}}
                        @if($child->blood_group)

                            <div class="meta">
                                Blood Group: {{ $child->blood_group }}
                            </div>

                        @endif


                        {{-- Progress --}}
                        {{-- <div class="progress-track">

                            <div class="progress-fill" style="width:0%;">
                            </div>

                        </div> --}}


                        {{-- View Record --}}
                        {{-- Ye block har child-card ke andar daalein --}}
                        {{-- (jahan pehle View/Edit/Delete buttons the) --}}

                        <div class="icon-actions">

                            <a href="{{ route('parent.viewRecord', $child->id) }}" class="icon-action icon-view" title="View">
                                <i class="bi bi-eye"></i>
                            </a>

                            <a href="{{ route('parent.editChild', $child->id) }}" class="icon-action icon-edit" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>

                            <form action="{{ route('parent.deleteChild', $child->id) }}" method="POST"
                                onsubmit="return confirm('Delete this child record?');" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="icon-action icon-delete" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>

                        </div>



                    </div>

                @endforeach

            </div>

        </div>


    @endif

@endsection