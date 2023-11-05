<head>

    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}"></script> --}}
    
        <title>Lock Stitch</title>
    </head>
    <body>
        @php
            $questions = [
                'The trainee has understood all the informations provided by the evaluator for this operation',
                'The trainee cleans the machine properly before starting the given task.',
                'Trainee threaded the machine properly according to standard threading procedure',
                'The trainee knows how to attach the required needle',
                'The trainee checked the level of oil.',
                'The trainee adjusted the stitch length/SPI for proper stitching.',
                'Trainee has adjusted the thread tension to achieve the required seam appreance',
                'The sitting posture of trainee is correct while sitting on the sewing machine',
                'The trainee has stitched a rough fabric to ensure the final setting of machine',
                'The trainee placed the input cut parts properly to facilitate the picking before sewing.',
                'The pick and place of the cut parts for sewing are correct',
                'The hand position of the trainee is correct to complete the operation.',
                'The training has skills to handle the fabric and machine according to the operation to be performed.',
                'The trainee has the skill to use the maximum speed of the machine',
                'There syncronization of  mind, hand and quickness to perform an operation was good.',
                'The trainee completed the given operation and placed the stitched component properly',
                'The trainee applied revese/back stitch upon ending the seam',
                'The trainee switched off the machine immediately on completion of operation',
                'The trainee followed the SAM (Standard Allowed Minutes) for the done operation (Evaluated using stop watch or camera recording).',
                'The effciency (productivity; no. of operations performed in given time) of traini with respect to the particular performed operation.',
    ];
            $questions2 = [
            'Garment was cleaned of hanging threads at the end of operation.',
            'Stitches (consistency, stitch length, stitch width) are correct as per standard conditions mentioned for the particular operation.',
            'There is no skipped stitch in the stitched components',
            'There is no broken stitch in the stitched components',
            'There is no open seam in the stitched components',
            'There is no imbalance of stitch in the stitched components like a too tight stitch or too loose stitch',
            'Seams are alligned properly (curved or  straight).',
            'There is no seam puckering in the stitched components',
            'There is no seam slippage in the stitched components,',
            'Seam allowance is properly controlled throughout the stitching (Seam width or seam heading).',
            'The trainee placed the fabric with the correct sides together during stitching.',
            'The appearnce of seam and stitch  with respect to aesthetic was correct.',
            'Outgoing Quality Level is determined based on the no of defect found in the stitched components'
    ];

    $questions3 = [
        'There is no open seam in the stitched components',
            'There is no imbalance of stitch in the stitched components like a too tight stitch or too loose stitch',
            'Seams are alligned properly (curved or  straight).',
            'There is no seam puckering in the stitched components',
            'There is no seam slippage in the stitched components,',
    ];
        @endphp
      @extends('layouts\app')
      @section('content')
      <form action="/home/lock-stitch/store" method="POST">
        @csrf
        <div class="container card">
            <div class="card-header my-4">
                Stitching Management
            </div>
            <div class="card-body">
                
                  
                    {{-- Questions --}}
                    @foreach ($questions as $i=>$question)
                    <div class="mb-3">
                        <label for="stitching-management-{{$i}}" class="form-label">{{$question}}</label>
                        <input type="number" class="form-control" id="stitching-management-{{$i}}" placeholder="0" name="stitching-management-[{{$i}}]">
                      </div>
                      @endforeach
                          <br>
                
            </div>
        </div>

        <br><br>
        
        <div class="container card">
            <div class="card-header my-4">
                Quality Management
            </div>
            <div class="card-body">
                    {{-- Questions2 --}}
                    @foreach ($questions2 as $i=>$question)
                    <div class="mb-3">
                        <label for="quality-management-{{$i}}" class="form-label">{{$question}}</label>
                        <input type="number" class="form-control" id="quality-management-{{$i}}" placeholder="0" name="quality-management-[{{$i}}]">
                      </div>
                      @endforeach
                          <br>
                
            </div>
        </div>

        <br><br>
        
        <div class="container card">
            <div class="card-header my-4">
                Basic Knowldge
            </div>
            <div class="card-body">
                    {{-- Questions2 --}}
                    @foreach ($questions2 as $i=>$question)
                    <div class="mb-3">
                        <label for="basic-knowldge-{{$i}}" class="form-label">{{$question}}</label>
                        <input type="number" class="form-control" id="basic-knowldge-{{$i}}" placeholder="0" name="basic-knowldge-[{{$i}}]">
                      </div>
                      @endforeach
                          <br>
                
            </div>
        </div>

        <br>
        {{-- Submit Button --}}
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
        @endsection
    </body>