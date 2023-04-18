<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    function addTestimonial() {
      return view('admin.testimonials');
    }

    public function insertTestimonial(Request $request) {
    $request->validate([
        'Client_Name' => 'required',
        'Paragraph' => 'required'
    ]);

    $testimonial = new Testimonial();
    $testimonial->Client_Name = $request->input('Client_Name');
    $testimonial->Paragraph = $request->input('Paragraph');
    $testimonial->save();

    return redirect()->back()->with('success', 'Testimonial added successfully');
}
  

  function showTestimonial() {
    $testData = Testimonial::all();
    return view('main-elements.client-testimonials.client-testimonials',['testData' => $testData ?? []]);
  }

  function showTestimonialAdmin() {
    $testData = Testimonial::all();
    return view('admin-elements.client-testimonials.client-testimonials',['testData' => $testData ?? []]);
  }

  public function deleteTestimonial($id) {
      $testimonial = Testimonial::findOrFail($id);
      $testimonial->delete();
      return redirect()->back()->with('success', 'Testimonial deleted successfully');
  }

  public function updateTestimonial(Request $request, $id) {
    $request->validate([
        'Client_Name' => 'required',
        'Paragraph' => 'required'
    ]);

    $testimonial = Testimonial::find($id);
    $testimonial->Client_Name = $request->input('Client_Name');
    $testimonial->Paragraph = $request->input('Paragraph');

    $testimonial->save();

    return redirect()->back()->with('success', 'Testimonial updated successfully');
}

}
