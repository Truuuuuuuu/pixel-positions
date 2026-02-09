<?php
///it: keyword is important
use App\Models\Employer;
use App\Models\Job;


test('it belongs to an employer', function ()  {
    //Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    //Act and Assert
    expect($job->employer->is($employer))->toBeTrue();

});

it('can have a tags', function (){
    $job = Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});
