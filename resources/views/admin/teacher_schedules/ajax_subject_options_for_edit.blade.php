
    <label>Select Subject</label>
    <select name="subject_id" id="subject_id" class="custom-select" style="width: 100%;">
    <option value="">Select</option>
    @foreach($subjects as $subject)
    <option value="{{ $subject['id'] }}" @if(!empty($teacherScheduleData['subject_id']) &&
        $teacherScheduleData['subject_id'] == $subject['id']) selected @endif>{{ $subject['subject_name'] }}</option>
    @endforeach
    </select>
