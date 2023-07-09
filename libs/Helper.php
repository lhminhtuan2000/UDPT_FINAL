<?php
   class Helper extends Controller
   {
      public function countAnswer($questionId)
      {
         $model = $this->model('AnswerModel');

         return $model->countAnswer($questionId);
      }

      public function countEvaluate($answerId)
      {
         $model = $this->model('EvaluateModel');

         return $model->countEvaluate($answerId);
      }
   }
