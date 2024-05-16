<x-layout>
    <x-slot:heading>
        Users' Phone
    </x-slot:heading>
    @guest
        <h1> Please logged in to contact and display the phones</h1>
    @endguest
    
    @auth
        <div style="display: flex; justify-content: space-around; margin-top: 50px;" >
            <a href="/contact/smartphone/{{ $user->id }}" style="text-decoration: none;">
                <div style="flex: 0 0 30%; background-color: #ffc107; padding: 20px; text-align: center; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
                  <h2 style="color: #333; font-size: 24px; margin-bottom: 10px;">My Smartphones</h2>
                </div>
              </a>
              
              <a href="/contact/landlinephone/{{$user->id}}" style="text-decoration: none;">
                <div style="flex: 0 0 30%; background-color: #03a9f4; padding: 20px; text-align: center; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
                  <h2 style="color: #333; font-size: 24px; margin-bottom: 10px;">My Landline Phones</h2>
                </div>
              </a>
            
              <a href="/contact/featurephone/{{$user->id}}" style="text-decoration: none;">
                <div style="flex: 0 0 30%; background-color: #4caf50; padding: 20px; text-align: center; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
                  <h2 style="color: #333; font-size: 24px; margin-bottom: 10px;">My Feature Phones</h2>
                </div>
              </a>
        </div>
    @endauth
</x-layout>