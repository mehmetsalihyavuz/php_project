<x-layout>
    <x-slot:heading>
        Phone Market
    </x-slot:heading>

<div style="display: flex; justify-content: space-around; margin-top: 50px;">

    <a href="{{ route('smartphone.index') }}" style="text-decoration: none;">
      <div style="flex: 0 0 30%; background-color: #ffc107; padding: 20px; text-align: center; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
        <h2 style="color: #333; font-size: 24px; margin-bottom: 10px;">Smartphones</h2>
        <p style="color: #666; font-size: 16px;">Explore our collection of smartphones.</p>
      </div>
    </a>
    
    <a href="{{ route('landlinephone.index') }}" style="text-decoration: none;">
      <div style="flex: 0 0 30%; background-color: #03a9f4; padding: 20px; text-align: center; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
        <h2 style="color: #333; font-size: 24px; margin-bottom: 10px;">Landline Phones</h2>
        <p style="color: #666; font-size: 16px;">Discover our selection of landline phones.</p>
      </div>
    </a>
  
    <a href="{{ route('featurephone.index') }}" style="text-decoration: none;">
      <div style="flex: 0 0 30%; background-color: #4caf50; padding: 20px; text-align: center; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
        <h2 style="color: #333; font-size: 24px; margin-bottom: 10px;">Feature Phones</h2>
        <p style="color: #666; font-size: 16px;">Browse our assortment of feature phones.</p>
      </div>
    </a>
  
</div>
  
</x-layout>