<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UpcomingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return[
            'id' =>$this->id,
            'course_id' => $this->course_id,
            'course' => $this->course->name,
            'image' => asset($this->course->image),
            'duration' => $this->course->duration,
            'fee' => $this->course->fee,
            'date' =>$this->date,
            'time' =>$this->time,
            'syllabus' => $this->course->syllabus,
            'type' => $this->class_type,
        ];
    }
}
