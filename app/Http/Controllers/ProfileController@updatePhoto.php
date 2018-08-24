<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller {
  public function updatePhoto(Request $request)
  {
    $this->validate($request, [
      'photo' => 'required|image'
    ]);

    $file = $request->file('photo');
    $extension = $file->getClientOriginalExtension();
    $fileName = auth()->id() . '.' . $extension;
    $path = public_path('images/users/'.$fileName);

    Image::make($file)->fit(144, 144)->save($path);

    $user = auth()->user();
    $user->photo_extension = $extension;
    $saved = $user->save();

    $data['success'] = $saved;
    $data['path'] = $user->getAvatarUrl() . '?' . uniqid();

    return $data;
  }
}
