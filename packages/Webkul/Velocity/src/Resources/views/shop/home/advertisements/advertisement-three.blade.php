@php
    $isRendered = false;
    $advertisementThree = null;
    $isLazyLoad = ! isset($lazyload) ? true : ( $lazyload ? true : false );
@endphp

@if ($velocityMetaData && $velocityMetaData->advertisement)
    @php
        $advertisement = json_decode($velocityMetaData->advertisement, true);

        if (isset($advertisement[3]) && is_array($advertisement[3])) {
            $advertisementThree = array_values(array_filter($advertisement[3]));
        }
    @endphp

    @if ($advertisementThree)
        @php
            $isRendered = true;
        @endphp

        <div class="container-fluid advertisement-three-container">
            <div class="row col-12">
                <div class="col-lg-6 col-md-12 second-panel">
                    <h6>
                        Let me start by introducing myself my name is Daksh Kakkar, I’m a psychic medium ,which simply means I am able to deliver messages from spirit to you, it could be a departed loved one, a pet friend you lost or it could be a general guidance, whatever your pick I am here for you on this journey.
                        <br><br>

                        And let me clear your reservations right here, as opposed to what movies depict spirit is all around us, guiding us, taking care of us and sending us messages of love. Everything is energy and just like we can’t see magnetic field but birds can, I can see and hear spirit (Clairvoyant and Clairaudience) even though you may not be able to, but that’s where my gifts and skills are put to service.
                        <br><br>

                        My own journey with spirit started just as when I was learning my a, b, c s in form of friends who my family thought out to be imaginary friends. They took care of me as a shy and awkward kid and made me familiar to the world which I whole heartly love and respect now.
                        <br><br>

                        I’ve always had a keen interest in occult sciences wherein I learnt intuitively how to read tarot, graphology, reiki, spells, rituals and much more.
                        <br><br>

                        And now with deep mediation, a lot of practice and blessing of Maa Kali I’m able to hone the skill I was born with that able to deliver messages directly from your loved ones.
                        <br><br>

                        With me you are always in safe hands
                        <br><br>
                        See you on the other side
                    </h6>
                </div>

                <!-- @if ( isset($advertisementThree[0])) -->
                    <a @if (isset($one)) href="{{ $one }}" @endif class="col-lg-6 col-md-12 no-padding">
                        <img
                            class="full-width {{ $isLazyLoad ? 'lazyload' : '' }}"
                            @if (! $isLazyLoad) src="{{ Storage::url($advertisementThree[0]) }}" @endif
                            data-src="{{ Storage::url($advertisementThree[0]) }}" alt="" />
                    </a>
                <!-- @endif -->
            </div>
        </div>
    @endif
@endif